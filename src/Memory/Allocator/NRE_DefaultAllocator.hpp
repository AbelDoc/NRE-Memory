    
    /**
     * @file NRE_Allocator.hpp
     * @brief Declaration of Memory's API's Object : DefaultAllocator
     * @author Louis ABEL
     * @date 14/03/2020
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once

    #include <cassert>
    #include <limits>
    #include <memory>
    #include "NRE_IAllocator.hpp"
    
    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Memory
         * @brief Memory's API
         */
        namespace Memory {
        
            /**
             * @class DefaultAllocator
             * @brief Default allocator using global new and delete
             */
            template <class T>
            class DefaultAllocator : public IAllocator<DefaultAllocator<T>> {
                public: // Fields
                    template <typename>
                    struct isSame : std::false_type {
                    };
                    template <class K>
                    struct isSame<DefaultAllocator<K>> : std::true_type {
                    };
    
                public: // Methods
                    /**
                     * @return the maximum allocation size
                     */
                    std::size_t getMaxSize() const {
                        return std::numeric_limits<std::size_t>::max();
                    }
                    /**
                     * Retrieve the address of an object
                     * @param object the object to return his address
                     * @return       the object's address
                     */
                    T* getAddress(T& object) const {
                        return std::addressof(object);
                    }
                    /**
                     * Retrieve the address of an object
                     * @param object the object to return his address
                     * @return       the object's address
                     */
                    const T* getAddress(T const& object) const {
                        return std::addressof(object);
                    }
                    /**
                     * Allocate n * sizeof(T) bytes
                     * @param n the number of object
                     * @return  a pointer on the first allocated bytes
                     */
                    [[nodiscard]] T* allocate(std::size_t n) {
                        return static_cast <T*> (::operator new(n * sizeof(T)));
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     */
                    void deallocate(T*& p) {
                        ::operator delete(p);
                        p = nullptr;
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     * @param n the number of object allocated
                     */
                    void deallocate(T*& p, std::size_t n) {
                        ::operator delete(p, n);
                        p = nullptr;
                    }
                    /**
                     * Construct a K-type object in the given pointer with given arguments
                     * @param p    the pointer to construct the object
                     * @param args the construction arguments
                     */
                    template <class K, class ... Args>
                    K* construct(K* p, Args && ... args) {
                        assert(p != nullptr);
                        return static_cast <K*> (::new(static_cast <void*> (p)) K(std::forward<Args>(args)...));
                    }
                    /**
                     * Destroy an given to the given pointer
                     * @param p the object address
                     */
                    template <class K>
                    void destroy(K* p) {
                        p->~K();
                    }
                    /**
                     * Equality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K, typename std::enable_if<DefaultAllocator<T>::isSame<K>::value, int>::type = 0>
                    bool equal(K const& o) const {
                        (void)o;
                        return true;
                    }
                    /**
                     * Equality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K, typename std::enable_if<!DefaultAllocator<T>::isSame<K>::value, int>::type = 0>
                    bool equal(K const& o) const {
                        (void)o;
                        return false;
                    }
                    /**
                     * Equality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K>
                    bool operator ==(DefaultAllocator<K> const& o) const {
                        return equal(o);
                    }
                    /**
                     * Inequality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K>
                    bool operator !=(DefaultAllocator<K> const& o) const {
                        return  !(*this == o);
                    }
            };
            
            #ifndef NRE_USE_MEMORY_MANAGER
                template <class T>
                using Allocator = DefaultAllocator<T>;
            #endif
            
        }
    }