    
    /**
     * @file NRE_Allocator.hpp
     * @brief Declaration of Memory's API's Object : DirectAllocator
     * @author Louis ABEL
     * @date 21/03/2020
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
             * @class DirectAllocator
             * @brief Allocate memory using malloc and free directly
             */
            template <class T>
            class DirectAllocator : public IAllocator<DirectAllocator<T>> {
                public: // Fields
                    template <typename>
                    struct isSame : std::false_type {
                    };
                    template <class K>
                    struct isSame<DirectAllocator<K>> : std::true_type {
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
                     * Allocate n * sizeof(T) bytes by calling global new operator
                     * @param n the number of object
                     * @return  a pointer on the first allocated bytes
                     */
                    [[nodiscard]] T* allocate(std::size_t n) {
                        return static_cast <T*> (malloc(n * sizeof(T)));
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     * @param n the number of object allocated
                     */
                    void deallocate(T* p, std::size_t n) {
                        (void)n;
                        free(p);
                        p = nullptr;
                    }
                    /**
                     * Construct a K-type object in the given pointer with given arguments
                     * @param p    the pointer to construct the object
                     * @param args the construction arguments
                     */
                    template <class K, class ... Args>
                    void construct(K* p, Args && ... args) {
                        assert(p != nullptr);
                        ::new(static_cast <void*> (p)) K(std::forward<Args>(args)...);
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
                    template <class K, typename std::enable_if<DirectAllocator<T>::isSame<K>::value, int>::type = 0>
                    bool equal(K const& o) const {
                        (void)o;
                        return true;
                    }
                    /**
                     * Equality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K, typename std::enable_if<!DirectAllocator<T>::isSame<K>::value, int>::type = 0>
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
                    bool operator ==(DirectAllocator<K> const& o) const {
                        return equal(o);
                    }
                    /**
                     * Inequality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K>
                    bool operator !=(DirectAllocator<K> const& o) const {
                        return  !(*this == o);
                    }
            };
            
        }
    }