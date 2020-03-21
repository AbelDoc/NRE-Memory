    
    /**
     * @file NRE_Allocator.hpp
     * @brief Declaration of Memory's API's Object : ManagerAllocator
     * @author Louis ABEL
     * @date 21/03/2020
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once

    #include <cassert>
    #include <limits>
    #include <memory>
    #include "NRE_IAllocator.hpp"
    #include "../Manager/NRE_MemoryManager.hpp"

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
             * @class ManagerAllocator
             * @brief A variant of DirectAlloctor but store every call in MemoryManager
             */
            template <class T>
            class ManagerAllocator : public IAllocator<ManagerAllocator<T>> {
                public: // Fields
                    template <typename>
                    struct isSame : std::false_type {
                    };
                    template <class K>
                    struct isSame<ManagerAllocator<K>> : std::true_type {
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
                        T* mem = static_cast <T*> (malloc(n * sizeof(T)));
                        if (!mem) {
                            throw std::bad_alloc();
                        }
                        Utility::Singleton<MemoryManager>::get().storeMemory(mem);
                        return mem;
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     */
                    void deallocate(T*& p) {
                        Utility::Singleton<MemoryManager>::get().removeMemory(p);
                        free(p);
                        p = nullptr;
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     * @param n the number of object allocated
                     */
                    void deallocate(T*& p, std::size_t) {
                        Utility::Singleton<MemoryManager>::get().removeMemory(p);
                        free(p);
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
                    template <class K, typename std::enable_if<ManagerAllocator<T>::isSame<K>::value, int>::type = 0>
                    bool equal(K const& o) const {
                        (void)o;
                        return true;
                    }
                    /**
                     * Equality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K, typename std::enable_if<!ManagerAllocator<T>::isSame<K>::value, int>::type = 0>
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
                    bool operator ==(ManagerAllocator<K> const& o) const {
                        return equal(o);
                    }
                    /**
                     * Inequality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K>
                    bool operator !=(ManagerAllocator<K> const& o) const {
                        return  !(*this == o);
                    }
            };
            
            #ifdef NRE_USE_MEMORY_MANAGER
                template <class T>
                using Allocator = ManagerAllocator<T>;
            #endif
            
        }
    }